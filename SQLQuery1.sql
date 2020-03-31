create table person (
	name varchar(20) not null,
	username varchar(50) not null primary key,
	password varchar(47) not null unique,
	permission bit ,
	phoneNumber varchar(11) unique
);

create table shiftWork (
	startTime time not null,
	endTime time,
	MaxMemberNumber int,
	shiftCost double,
	shiftNum varchar(50) not null primary key
);

create table trainerShift(
	shiftNum int not null REFERENCES shiftWork (shiftNum),
	trainerID varchar(30) not null REFERENCES person (username),
	HoursNum int,
    PRIMARY KEY(shiftNum, trainerID)
);

create table bill(
	bill_ID int primary key AUTO_INCREMENT,
	endOfTheGracePeriod time ,
	paied boolean
);

create table package(
	discount float,
	shiftCostAfterDiscount float,
	shiftNum int not null REFERENCES shiftWork (shiftNum),
	packageName Varchar(50) not null primary key
);

create table billPackage(
	packageName varchar(50) REFERENCES package (packageName),
	bill_ID int not null REFERENCES bill (bill_ID),
    PRIMARY KEY(packageName, bill_ID)
);

create table memberAttendance(
	member varchar(30) REFERENCES person (username),
	attData time not null,
    PRIMARY KEY(member, attData)
);


create table memberBill(
	member varchar(30)  not null REFERENCES person (username),
	bill_ID int REFERENCES bill (bill_ID),
    PRIMARY KEY (member, bill_ID)
);