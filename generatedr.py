from io import BytesIO
import sys


from barcode import EAN13
from barcode.writer import SVGWriter

# Write to a file-like object:
rv = BytesIO()
order_number = sys.argv[1] 
EAN13("100000902922", writer=SVGWriter()).write(rv)

# Or to an actual file:
with open("somefile.svg", "wb") as f:
    EAN13(str(order_number), writer=SVGWriter()).write(f)
print(order_number)


##Обязательно запуск виртуальной среды для powersheel и python .\vinv\Scripts\activate