====================
OSI Layer
====================

Application 
Menyediakan interface antara aplikasi dgn protokolnya. Contoh browser dan http

Presentation 
Mendefinisikan format dari data yg dikirim spt text, binary atau jpeg dan melakukan enkripsi dan deenkripsi data.

Session 
Menjaga komunikasi dari saat dimulai, berlangsung hingga selesai.

Transport
Melakukan host to host connection (pembentukan koneksi) juga error recovery dan mengkonversi data dalam bentuk segmen menjadi packet.

Network
Mendefinisikan alamat IP source dan destination juga melakukan routing packet dan mengkonversi data dalam bentuk packet menjadi frame.

Data link 
Menentukan alamat mac address source dan destination dan mengkonversi data dalam bentuk paket menjadi frame.

Physical layer
Mengkonversi data dalam bentuk frame menjadi bit.

Protocol merupakan cara agar setiap perangkat yang berbeda-beda bisa saling berkomunikasi dengan efektif baik secara perangkat lunak maupun perangkat keras.

Berbicara OSI layer maka mengacu ke sejarah dan implementasi.
Sejarah :
untuk menyeragamkan protokol pada perangkat yg dibuat berbagai vendor agar bisa saling berkomunikasi.

Implementasi 
Proses mengirim data dgn cara mengubah data dari data itu sendiri menjadi segmen, packet, frame kemudian menjadi bit.

Mekanisme HTTP: 
HTTP Get Request –> 
HTTP Get Reply –> 
HTTP Data.

Mekanisme TCP :
Three-way Handshake TCP (SYN -> SYN/ACK, ACK -> DATA)
Pembentukan Koneksi (TWH) –> Pengiriman Data (dengan error recovery).

Rangkuman alurnya: 
Input URL –> 
Menanyakan alamat IP dari sebuah domain –> 
Melakukan request koneksi ke IP yang sudah didapat –> 
Melakukan pengiriman data.

====================
IP Address
====================

IP address digunakan sebagai alamat logic (bukan fisik) sebuah komputer, yang melekat di Network Interface Card (NIC).

IPv4 menggunakan 32 bit masing - masing 8 bit ditiap oktetnya, contoh :

11000000.10101000.00001010.01000101 atau 192.168.10.69 (dalam bentuk desimal).

Bit   : bilangan biner, nilainya 1 (on) atau 0 (off),
Byte  : sama dengan 8 bit,
Oktet : 1 oktet terdiri dari 8 bit (sama dengan 1 byte) dan IPv4 terdiri dari 4 oktet.
Network address   : alamat network (seperti alamat perumahan, maupun blok perumahan),
Host address      : alamat host (seperti alamat aktual sebuah rumah di perumahan),
Broadcast address : alamat yang digunakan untuk mengirim pesan ke semua host.

Tiap oktet dibagi atas network dan host.

Kelas IP Address    Range (bit) Oktet Pertama   Jumlah Network Address    Jumlah Host Address
Class A	            0 sampai 127                126 (2 reserved)          16.777.214
Class B	            128 sampai 191              16.384	                  65.534
Class C	            192 sampai 223              2.097.152                 254

*2 Reserved IP digunakan untuk default route 0.0.0.0 dan loopback ip 127.0.0.0

Dari tabel diatas, berikut adalah range network address yang valid (yang bisa digunakan):

Class A: 1.0.0.0      sampai    126.0.0.0
Class B: 128.0.0.0    sampai    191.255.0.0
Class C: 192.0.0.0    sampai    223.255.255.0

Berikut range private ip address (sesuai kelasnya):

Kelas A: 10.0.0.0     sampai    10.255.255.255
Kelas B: 172.16.0.0   sampai    172.31.255.255
Kelas C: 192.168.0.0  sampai    192.168.255.255

Subnet adalah sebuah alamat network yang dibagi menjadi bagian-bagian yang lebih kecil. Sesuai dengan namanya, sub(divided)-network.