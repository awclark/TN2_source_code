from modules import HTTPClient
import numpy
from modules import UDPClient
from lib import jsonprocesser
from modules import IperfClient
from lib import jsonprocesser
from modules import UDPClient
from threading import Thread
import time

#HTTP_check = HTTPClient.HttpClient()

upload_file = jsonprocesser.jsonprocesser()
iperf_test = IperfClient.IperfClient('130.56.253.43',5201)
udp_test = UDPClient.UDPClient('130.56.253.43')

print 'Starting HD video upload'
time_profile = [0,3./9,1./9,1./9,2./9,2./9,1./9]
result = udp_test.UDP_Bursty_Upload(5205, 5204, 800, 5000, 0, 5,time_profile)
print result
#upload_file.json_upload('130.56.253.43', 5208)