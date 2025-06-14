import requests
from urllib.parse import urlparse

# list of known phishing sites
phishing_sites = ["examplephishingsite1.com", "examplephishingsite2.com"]

def is_phishing(url):
    # parse the URL
    parsed_url = urlparse(url)
    # check if the URL is in the list of known phishing sites
    if parsed_url.netloc in phi phishing_sites:
        return True
    else:
        return False

# check if a URL is a phishing site
url = "https://examplephishingsite1.com"
if is_phishing(url):
    print("This site is a known phishing site.")
else:
    print("This site is not a known phishing site.")
