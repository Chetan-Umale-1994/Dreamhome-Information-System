insert into branch values
  ('B5', '22 Deer Rd', 'Sidcup', 'London', 'SW1 4EH', '0171-886-1212', '0171-886-1214');
insert into branch values
  ('B7', '16 Argyll St', 'Dyce', 'Aberdeen', 'AB2 3SU', '01224-67125', '01224-67111');
insert into branch values
  ('B3', '163 Main St', 'Patrick', 'Glasgow', 'G119QX', '0141-339-2178', '0141-339-4439');
insert into branch values
  ('B4', '32 Manse Rd', 'Leigh', 'Bristol', 'BS99 1NZ', '0117-916-1170', '0117-776-1114');
insert into branch values
  ('B2', '56 Clover Dr', null, 'London', 'NW10 6EU', '0181-963-1030', '0181-453-7992'); 
insert into staff values
  ('SL21', 'John', 'White', '19 Taylor St, Cranford, London', '0171-884-5112', 
'Manager', 'M', '1945-10-01', 30000, 'WK442011B', 'B5');
insert into staff values
  ('SG37', 'Ann', 'Beech', '81 George St, Glasgow PA1 2JR',
'0141-848-3345', 'Snr Asst', 'F', '1960-11-10', 12000, 'WL432514C', 'B3');
insert into staff values
  ('SG14', 'David', 'Ford', '63 Ashby St, Patrick, Glasgow G11',
'0141-339-2177', 'Deputy', 'M', '1958-03-24', 18000, 'WL220658D', 'B3');
insert into staff values
  ('SA9', 'Mary', 'Howe', '2 Elm Pl, Aberdeen AB2 3SU', null, 
'Assistant', 'F', '1970-02-19', 9000, 'WM532187D', 'B7');
insert into staff values
  ('SG5', 'Susan', 'Brand', '5 Gt Western Rd, Glasgow G12', 
'0141-334-2001', 'Manager', 'F', '1940-06-03', 24000, 'WK588932E', 'B3');
insert into staff values
  ('SL41', 'Julie', 'Lee', '28 Malvern ST, Kilburn NW2', 
'0181-554-3541', 'Assistant', 'F', '1965-06-13', 9000, 'WA290573K', 'B5');
insert into property_for_rent values
  ('PA14', '16 Holhead', 'Dee', 'Aberdeen', 'AB7 5SU', 'House', 6, 650, 'CO46', 
'SA9', 'B7');
insert into property_for_rent values
  ('PL94', '6 Argyll St', 'Kilburn', 'London', 'NW2', 'Flat', 4, 400, 'CO87', 
'SL41', 'B5');
insert into property_for_rent values
  ('PG4', '6 Lawrence St', 'Patrick', 'Glasgow', 'G11 9QX', 'Flat', 3, 350, 
'CO40', 'SG14', 'B3');
insert into property_for_rent values
  ('PG36', '2 Manor Rd', null, 'Glasgow', 'G32 4QX', 'Flat', 3, 375, 'CO93', 
'SG37', 'B3');
insert into property_for_rent values
  ('PG21', '18 Dale Rd', 'Hynland', 'Glasgow', 'G12', 'House', 5, 600, 'CO87', 
'SG37', 'B3');
insert into property_for_rent values
  ('PG16', '5 Novar Dr', 'Hynland', 'Glasgow', 'G12 9AX', 'Flat', 4, 450, 'CO93', 
'SG14', 'B3');
insert into client values
  ('CR76', 'John', 'Kay', '56 High St, Putney, London SW1 4EH', '0171-774-5632', 
'Flat', 425);
insert into client values
  ('CR56', 'Aline', 'Stewart', '64 Fern Dr, Pollock, Glasgow G42 0BL', '0141-848-1825', 
'Flat', 350);
insert into client values
  ('CR74', 'Mike', 'Ritchie', '18 Tain ST, Gourock, PA1G 1YQ', '01475-392178', 
'House', 750);
insert into client values
  ('CR62', 'Mary', 'Tregear', '5 Tarbot Rd, Kildary, Aberdeen AB9 3ST', '01224-176720', 
'Flat', 600);
insert into owner values
  ('CO46', 'Joe', 'Keogh', '2 Fergis Dr, Banchory, Aberdeen AB2 7SX', '01224-861212');
insert into owner values
  ('CO87', 'Carol', 'Farrel', '6 Achray St, Glasgow G32 9DX', '0141-357-7419');
insert into owner values
  ('CO40', 'Tina', 'Murphy', '63 Well St, Shawlands, Glasgow G42', '0141-943-1728');
insert into owner values
  ('CO93', 'Tony', 'Shaw', '12 Park Pl, Hillhead, Glasgow G4 0QR', '0141-225-7025');
insert into viewing values
  ('CR56', 'PA14', '1995-05-24', 'too small');
insert into viewing values
  ('CR76', 'PG4', '1995-04-20', 'too remote');
insert into viewing values
  ('CR56', 'PG4', '1995-05-26', null);
insert into viewing values
  ('CR62', 'PA14', '1995-05-14', 'no dining room');
insert into viewing values
  ('CR56', 'PG36', '1995-04-28', null);

