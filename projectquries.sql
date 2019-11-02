create database studentbusp;
use studentbusp;
create table student(
    application_id varchar(20) primary key,
    s_usn varchar(20),
    s_name varchar(30),
    s_branch varchar(30),
    s_sem varchar(5),
    s_collegeid integer,
    s_route integer,
    s_boarding varchar(30),
    s_dist  integer,
    s_eid varchar(40), 
    foreign key(s_route) references busdetails(b_route),
    foreign key(s_collegeid) references college(cid)  
);
create table routedetails(
    r_route integer primary key,
    r_name varchar(20)
);
create table busdetails(
    b_route integer,
    b_regno varchar(20),
    foreign key(b_route) references routedetails(r_route)
);
create table paydetails(
    p_applid varchar(20),
    paid varchar(4),
    p_date date,
    p_amount integer,
    p_validity date,
    foreign key(p_applid) references student(application_id)
);
create table college(
    cid integer primary key,
    clgname varchar(30)
);
create table inc(
    i integer
);
create table apid(
    aplid VARCHAR(20)
);
insert into routedetails values(101,'Manipal <==> Nitte');
insert into routedetails values(102,'Udupi <==> Nitte');
insert into routedetails values(103,'Mangalore <==> Nitte');

insert into busdetails values(101,'KA - 20MD - 8019');
insert into busdetails values(101,'KA - 20MD - 6003');
insert into busdetails values(101,'KA - 29MA - 2028');
insert into busdetails values(102,'KA - 19MD - 4363');
insert into busdetails values(102,'KA - 19MA - 3307');
insert into busdetails values(102,'KA - 20MD - 1350');
insert into busdetails values(103,'KA - 19MD - 6558');
insert into busdetails values(103,'KA - 20MD - 9545');
insert into busdetails values(103,'KA - 19MH - 9526');





