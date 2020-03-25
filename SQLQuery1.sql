create table person (
	fname varchar(20) not null,
	lname varchar(20) not null,
	username varchar(30) not null primary key,
	person_password varchar(10) not null unique,
	permission varchar(50) ,
	phoneNumber int unique
);

create table shiftWork (
	startTime time not null,
	endTime time,
	MaxMemberNumber int,
	shiftCost money,
	shiftNum int not null primary key,
);

create table trainerShift(
	shiftNum int not null REFERENCES shiftWork (shiftNum),
	trainerID varchar(30) not null REFERENCES person (username),
	HoursNum int
);

create table bill(
	bill_ID int not null primary key,
	endOfTheGracePeriod time ,
	paied money,
);

create table package(
	discount float,
	shiftCostAfterDiscount money,
	shiftNum int not null REFERENCES shiftWork (shiftNum),
	packageName Varchar(50) not null primary key
);

create table billPackage(
	packageName varchar(50) REFERENCES package (packageName),
	bill_ID int not null REFERENCES bill (bill_ID),

);

create table memberAttendance(
	member varchar(30) REFERENCES person (username),
	attData time not null primary key,
);


create table memberBill(
	member varchar(30)  not null REFERENCES person (username),
	bill_ID int REFERENCES bill (bill_ID),
);	