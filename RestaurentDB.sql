BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "CreditCard" (
	"CC_No"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"FirstName"	varcher(255),
	"LastName"	varcher(255),
	"ExpiryDate"	date
);
CREATE TABLE IF NOT EXISTS "Cash" (
	"ReceiptNo"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"Time"	timestamp,
	"Date"	date,
	"PaymentType"	varcher(255),
	"TotalAmount"	INT(20)
);
CREATE TABLE IF NOT EXISTS "Bill" (
	"BillNo"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"Time"	timestamp,
	"Date"	date,
	"BillAmount"	INT(20)
);
CREATE TABLE IF NOT EXISTS "Order" (
	"OrderId"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"Time"	timestamp,
	"Date"	date
);
CREATE TABLE IF NOT EXISTS "Stuff" (
	"StuffNo"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"FirstName"	varchar(255),
	"LastName"	varchar(255),
	"Phone"	INT(20),
	"City"	varchar(255),
	"Gender"	INT(1),
	"Salary"	INT(25),
	"JobTitle"	varchar(30)
);
CREATE TABLE IF NOT EXISTS "Meal" (
	"MealId"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"Name"	varchar(255),
	"Desciption"	varchar(255),
	"Price"	INT(20),
	"Size"	INT(20)
);
CREATE TABLE IF NOT EXISTS "Customer" (
	"CustomerId"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"Name"	varchar(255),
	"Phone"	INT(20),
	"Email"	varchar(255)
);
CREATE TABLE IF NOT EXISTS "C_Table" (
	"TableNo"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"Size"	INT(10),
	"IsReserved"	INT(1)
);
CREATE TABLE IF NOT EXISTS "Reservation" (
	"ReservationNo"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"Time"	timestamp,
	"Date"	date
);
COMMIT;
