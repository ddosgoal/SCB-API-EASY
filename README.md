# SCB-API-EASY V3.0

API documentation
SIAM COMMERCIAL BANK PUBLIC COMPANY LTD. 
Api scbeasy Bank 
V3 
```xml
endpoint	= https://fasteasy.scbeasy.link
```
1.0. Get balance
```json
- POST 
	{{endpoint}}/v2/deposits/summary

- Json Body
	{
		"depositList":[{
			"deviceid":"2ecc83a4-4df7-4835-8b8b-57b9ba7032c1",
			"accountNo":"1234567890",
			"pincode":"123456"
			}],
		"numberRecentTxn":2,"tilesVersion":"39"
	}

- Header
	'Content-Type: application/json; charset=UTF-8'
```
//////////////////////////////////////////////////////////////////////////////////////////////////////

2.0. Get transactions
```json
- POST 
	{{endpoint}}/v2/deposits/casa/transactions

- Json Body
	{
		"deviceid":"2ecc83a4-4df7-4835-8b8b-57b9ba7032c1",
		"accountNo":"1234567890",
		"pincode":"123456",
		"endDate":"2021-08-28",
		"pageNumber":"1",
		"pageSize":20,
		"productType":"2",
		"startDate":"2021-08-01"
	}

- Header
	'Accept-Language: th',
	'Content-Type: application/json; charset=UTF-8'
```
//////////////////////////////////////////////////////////////////////////////////////////////////////

3.0. Get transfer
```json
- POST 
	{{endpoint}}/v3/transfer/confirmation

- Json Body
	{
		"deviceid":"2ecc83a4-4df7-4835-8b8b-57b9ba7032c1",
		"accountFrom":"1234567890",
		"pincode":"123456",
		"accountFromType":"2",
		"accountTo":"9876543210",
		"accountToBankCode":"004",
		"amount":"1.00",
		"annotation":null,
		"transferType":"ORFT"
	}

- Header
	'Content-Type: application/json; charset=UTF-8'
```
//////////////////////////////////////////////////////////////////////////////////////////////////////

วิธีหา DeviceId
=====================
1) หาก APP SCB EASY ไม่ใช่ Version 3.38.0 ให้ลบออกก่อน

2) โหลดแอป 2 ตัว พร้อมกับ SCB EASY version 3.38.0
SCB EASY 3.38.0
https://cdn.discordapp.com/attachments/757719478909009931/849633718868246548/scb-easy_3.38.04219.apk
---------------------
โหลด Virtual Xposed
https://cdn.discordapp.com/attachments/795608701632643093/795904566523723816/VirtualXposed_for_GameGuardian_0.19.0.apk
----------------------
โหลด HttpCanary
https://cdn.discordapp.com/attachments/795608701632643093/795616493303758880/com.guoshi.httpcanary_2020-08-18.apk

3) ติดตั้ง Virtual Xposed แล้ว HttpCanary และ SCB EASY
จากนั้นก็ทำตามวิดีโอนี้
https://cdn.discordapp.com/attachments/757719478909009931/857089985508278272/Record_2021-06-02-19-20-44_e79c9436d602108ef6b0da3b1c04abf7.mp4

4) หลังจากติดตั้ง SCB EASY เข้าไปใน Xposed แล้ว ก็ให้ทำการลงทะเบียนแอป SCB ที่อยู่ใน Xposed ให้เสร็จ

5) ขั้นตอนการดึง DeviceID ปิดทุกแอพก่อน แล้วให้ทำตามวิดีโอ
https://cdn.discordapp.com/attachments/757719478909009931/857095270600015893/Record_2021-06-23-10-07-34.mp4
หา endpoint login/v2 หรือ login/v3 ก็ได้ มี DeviceID เหมือนกัน

เสร็จแล้วก็คัดลอกมาใช้ได้เลย DeviceID Pin 6 หลัก และ เลขที่บัญชี มาใช้ใน API ข้างบน
