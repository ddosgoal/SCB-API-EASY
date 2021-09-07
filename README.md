# SCB-API-EASY V3.0

### API documentation
### SIAM COMMERCIAL BANK PUBLIC COMPANY LTD. 
### API SCB Easy V3 
```xml
endpoint	= https://fasteasy.scbeasy.link
```
### 1.0. Get balance
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

### 2.0. Get transactions
```json
- POST 
	{{endpoint}}/v2/deposits/casa/transactions

- Json Body
	{
		"deviceid":"2ecc83a4-4df7-4835-8b8b-57b9ba7032c1",
		"accountNo":"1234567890",
		"pincode":"123456",
		"endDate":"2021-08-30",
		"pageNumber":"1",
		"pageSize":20,
		"productType":"2",
		"startDate":"2021-08-29"
	}

- Header
	'Accept-Language: th',
	'Content-Type: application/json; charset=UTF-8'
```
//////////////////////////////////////////////////////////////////////////////////////////////////////

### 3.0. Get transfer
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
