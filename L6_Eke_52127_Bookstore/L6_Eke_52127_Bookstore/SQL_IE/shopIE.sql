Create Database shopIE;
Create table shop.booksIE(
    book_id integer not null auto_increment unique
    title varchar (70),
    author varchar (70),
    price double (5,2),
    primary key (book_id)
);
INSERT INTO ShopIE.booksIE(
    book_id
    ,title
    ,author
    ,price
)
VALUES
 ('1','HTML', 'EKE', '10')
 ,('2','CSSL', 'EKEA', '10')
 ,('3','JavaScript', 'EKEB', '10')
 ,('4','Django', 'EKEC', '10')
 ,('5','PHP', 'EKED', '10');