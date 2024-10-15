import random
import csv

def generate_random_uk_plate():

    letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    numbers = '0123456789'

    plate1 = f"{letters[random.randint(0, 25)]}{letters[random.randint(0, 25)]}{numbers[random.randint(0, 9)]}"
    plate2 = f"{numbers[random.randint(0, 9)]}{letters[random.randint(0, 25)]}{letters[random.randint(0, 25)]}"
    return plate1 + plate2

number_plates = []
while len(number_plates) < 500:
    plate = generate_random_uk_plate()
    if plate not in number_plates:
        number_plates.append(plate)

with open('uk_number_plates.csv', 'w', newline='') as csvfile:
    fieldnames = ['Vehicle_plate']
    writer = csv.DictWriter(csvfile, fieldnames=fieldnames)

    writer.writeheader()
    for plate in number_plates:
        writer.writerow({'Vehicle_plate': plate})
