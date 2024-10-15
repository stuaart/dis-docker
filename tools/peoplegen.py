import faker
import csv
import random


# e.g., SMITH92LDOFJJ829
def generate_random_licence(lname):

    letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    numbers = '0123456789'

    seq = f"{numbers[random.randint(0, 9)]}{numbers[random.randint(0, 9)]}{letters[random.randint(0, 25)]}{letters[random.randint(0, 25)]}{letters[random.randint(0, 25)]}{letters[random.randint(0, 25)]}{letters[random.randint(0, 25)]}{letters[random.randint(0, 25)]}{numbers[random.randint(0, 9)]}{numbers[random.randint(0, 9)]}"
    
    return lname[:5].upper() + seq

def generate_random_uk_name_and_address():
    fake = faker.Faker('en_GB')
    fname = fake.first_name()
    lname = fake.last_name()
    address = fake.address()
    return fname, lname, address

names_and_addresses = [generate_random_uk_name_and_address() for _ in range(500)]

licences = []
with open('uk_names_addresses.csv', 'w', newline='') as csvfile:
    fieldnames = ['people_name', 'people_address', 'people_licence']
    writer = csv.DictWriter(csvfile, fieldnames=fieldnames)

 #   writer.writeheader()
    for fname, lname, address in names_and_addresses:
        address_fmt = address.replace("\n", ", ")
        
        while True:
            licence = generate_random_licence(lname)
            if licence not in licences: 
                licences.append(licence)
                break;
            else:
                print("Licence collision, trying again...\n")
                
        writer.writerow({'people_name': fname + " " + lname, 'people_address': address_fmt, 'people_licence': licence})
