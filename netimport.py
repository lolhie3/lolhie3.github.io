import requests
import importlib.util
import sys

def netimport(url, module_name):
    """
    Imports module from network by URL.

    Args:
        url (str):         URL to download a module from
        module_name (str): An internal module name to store functions in

    Returns:
        module:            A module to execute functions of

    Example:
        ```
        from netimport import netimport
        test = netimport("https://pymodules.example.com/test.py", "testm")
        print(test.somefunction())
        ```
    """
    response = requests.get(url)
    module_content = response.text
    # Create a module specification
    spec = importlib.util.spec_from_loader(module_name, loader=None)
    # Create a new module based on the spec
    module = importlib.util.module_from_spec(spec)
    # Execute the module content in the new module's namespace
    exec(module_content, module.__dict__)
    # Add the new module to sys.modules to make it importable
    sys.modules[module_name] = module
    return module
