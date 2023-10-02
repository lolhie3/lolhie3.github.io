import asyncio
import stupidwalletapi

swapikey = "Enter your SWAPI key here " #get it here: t.me/stupidwallet_bot
swapi = stupidwalletapi.StupidWalletAPI(swapikey)


async def main():
    invoice = await swapi.create_invoice(2, 75, 30)
    print("https://t.me/stupidwallet_bot?start="+invoice.invoice_unique_hash)

asyncio.run(main())
