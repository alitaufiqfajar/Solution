a = int(input("Masukkan nilai total belanja: Rp. "))
b = int(input("Masukkan uang yang dibayar: Rp. "))
c=b-a
print ("Kembaliannya sebesar Rp.",c,"dengan Rincian kembalian ")
d = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50]
for x in range (0, 10):
    i=0
    while c >= d[x]:
        c = c - d[x]
        i = i+1
        if (i>0):
            print ("Uang Rp. %d sebanyak %d lembar " %(d[x], i))
        else:
            print ("Selesai")