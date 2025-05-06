Experiment
1.	Mebuka XAMPP dan start Apache
 ![image](https://github.com/user-attachments/assets/47e31486-2d12-4c04-962c-d7e22091de72)


2.	Buat File Rentan (vulnerable.php)
 ![image](https://github.com/user-attachments/assets/1d1840bb-e980-4217-b267-7a757df2f3d3)


3.	Buat File Aman (safe.php)
 ![image](https://github.com/user-attachments/assets/156bea32-e2fe-4774-8b8b-1229b538177d)


4.	Uji Web di Browser
•	Versi aman
http://localhost/xss_web/safe.php?name=<script>alert('XSS')</script>
jika kita memasukan kode di atas Tidak akan muncul pop-up, hanya teks ditampilkan.
 ![image](https://github.com/user-attachments/assets/9dbea4cd-680e-441b-909f-5cd3b048a316)

•	Versi rentan
http://localhost/xss_web/vulnerable.php?name=<script>alert('XSS')</script>
jika kita memasukan kode di atas Akan muncul pop-up "XSS".
 ![image](https://github.com/user-attachments/assets/a1cdef93-42af-4c42-9ff4-cc8e710d03c3)



Experimen tambahan
<script>document.body.style.backgroundColor='red'</script>
1.	Di vulnerable.php, halaman akan jadi merah.
2.	Di safe.php, tidak terjadi apa-apa.
•	Versi aman
 ![image](https://github.com/user-attachments/assets/c5de6ce7-97a0-4f96-81f4-fd5cf3e640f2)


•	Versi rentan
![image](https://github.com/user-attachments/assets/a9cf87b5-829d-446b-b172-745a8621f5c8)

 
