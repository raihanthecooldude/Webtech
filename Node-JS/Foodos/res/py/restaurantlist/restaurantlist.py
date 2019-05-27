import requests
from bs4 import BeautifulSoup
import json
import ast
from datetime import datetime
import cx_Oracle

start_time = datetime.now()

con = cx_Oracle.connect('system/5590@localhost:1522/orcl')
cur = con.cursor()


area_url_list = []
restaurant_url_list = []

response1 = requests.get('http://www.hungrynaki.com/', allow_redirects = False)
code1 = response1.content.decode('utf-8')
soup1 = BeautifulSoup(code1, features="lxml")

script1 = soup1.find_all("script")
req_script1 = script1[19].text.split('\n')

json_string1 = req_script1[4].replace('			var arealist_string       = ', '')
json_string1 = json_string1.replace(';', '')
json_data1 = ast.literal_eval(json_string1)
area_details_json_data1 = json.loads(json_data1)

j = 0
for city in area_details_json_data1['city']:
    for area in city['area']:
        area_name = str(area['name']).lower().replace(' ', '-')
        area_url = "http://www.hungrynaki.com/restaurant-list/" + city['id'] + "/" + area['id'] + "/" + area_name

        if area_url not in area_url_list and city['id'] == "1":

            area_url_list.append(area_url)
            cur.callproc('insert_into_area', [area['id'], area['name'], area_url])
            response2 = requests.get(area_url, allow_redirects = False)
            code2 = response2.content.decode('utf-8')
            soup2 = BeautifulSoup(code2, features="lxml")

            script2 = soup2.find_all("script")
            req_script2 = script2[17].text.split('\n')

            json_string2 = req_script2[4].replace('			var restlist_string       = ', '')
            json_string2 = json_string2.replace(';', '')
            json_data2 = ast.literal_eval(json_string2)
            restaurant_details_by_area_json_data = json.loads(json_data2)

            i = 1
            for restaurant in restaurant_details_by_area_json_data['restaurants']:
                try:
                    i += 1
                    restaurant_name = str(restaurant['name']).lower().replace(' ', '-')
                    restaurant_url = "http://www.hungrynaki.com/restaurant/" + restaurant['id'] + "/" + restaurant_name + "/menu"
                    cur.callproc('insert_into_restaurant_by_area', [area['id'], restaurant['id']])

                    if restaurant_url not in restaurant_url_list:

                        print(area['name'] + " " + restaurant['name'])
                        print(restaurant_url)
                        cur.callproc('insert_into_restaurant', [restaurant['id'], restaurant['name'], restaurant['address'], restaurant_url])
                        restaurant_url_list.append(restaurant_url)
                        response3 = requests.get(restaurant_url, allow_redirects = False)
                        code3 = response3.content.decode('utf-8')
                        soup3 = BeautifulSoup(code3, features="lxml")

                        script3 = soup3.find_all("script")
                        req_script3 = script3[22].text.split('\n')

                        json_string3 = req_script3[4].replace('			var restmenu_string       = ', '')
                        json_string3 = json_string3.replace(';', '')
                        while (1):
                            k = json_string3.find('\\r\\n')
                            if (k > 0):
                                json_string3 = json_string3.replace('\\r\\n', '')
                            else:
                                break
                        json_data3 = ast.literal_eval(json_string3)
                        restaurant_details_by_area_json_data = json.loads(json_data3)

                        categorys = restaurant_details_by_area_json_data['categorys']

                        for category in categorys:
                            #print(x['menu-items'])
                            for menu_items in category['menu-items']:
                                #		print(menu_items['name'])
                                for sub_items in menu_items['sub-items']:
                                    #print(sub_items)
                                    cur.callproc('insert_into_food', [sub_items['id'], sub_items['name'], sub_items['price'], sub_items['category_name'], restaurant['id']])
                except:
                    print("error")


print(datetime.now() - start_time)