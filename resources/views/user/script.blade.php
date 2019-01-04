@extends('user/layout')
@section('content')

<div class="content">
    <form method="POST" enctype="multipart/form-data" action="{{url('uploadscript')}}">
    {{csrf_field()}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <h4>  Upload Buku</h4>
                                 <div class="header">
                                <!-- UPLOAD SCRIPT -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Pengarang</label>
                                                <input type="text" class="form-control border-input" name="nama_lengkap" id="nama_lengkap"required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Judul</label>
                                               <input type="text" class="form-control border-input" name="judul_buku" id="judul_buku"required>
                                            </div>
                                        </div>
                                       <div class="col-md-4">
                                            <div class="form-group">
                                               <div class="form-label">
                                                    <label> Category</label>
                                                        <div>
                                                            <div class="form-input">
                                                               <select name="category_id" id="category_id" class="form-control border-input" title="Choose the category" required>
                                                                    <option value="0" selected="selected">- Select Categories -</option>
                                                                    <option value="5">Novel</option>
                                                                    <option value="7">Kumpulan Puisi</option>
                                                                    <option value="8">Kumpulan Cerpen</option>
                                                                    <option value="9">Biography</option>
                                                                    <option value="10">Bisnis</option>
                                                                    <option value="11">Internet & Komputer</option>
                                                                    <option value="12">Agama</option>
                                                                    <option value="13">Travel</option>
                                                                    <option value="14">Parenting</option>
                                                                    <option value="15">Anak</option>
                                                                    <option value="38">Politik</option>
                                                                    <option value="17">Komik & Graphics Novel</option>
                                                                    <option value="18">Pengembangan Diri</option>
                                                                    <option value="19">Sex & Relationship</option>
                                                                    <option value="20">Humor</option>
                                                                    <option value="22">Pendidikan</option>
                                                                    <option value="23">Photo Book</option>
                                                                    <option value="24">Fotografi</option>
                                                                    <option value="25">Kesehatan</option>
                                                                    <option value="26">Memasak & Makanan</option>
                                                                    <option value="27">Game</option>
                                                                    <option value="28">Seni & Desain</option>
                                                                    <option value="29">Arsitektur</option>
                                                                    <option value="30">Interior & Pertamanan</option>
                                                                    <option value="31">Hukum</option>
                                                                    <option value="32">Hobi</option>
                                                                    <option value="33">Olahraga & Petualangan</option>
                                                                    <option value="34">Skenario Film</option>
                                                                    <option value="35">Text Book/Non Fiksi</option>
                                                                    <option value="36">True Story</option>
                                                                    <option value="39">Sejarah</option>
                                                                    <option value="40">Sains & Teknologi</option>
                                                                    <option value="43">Notebook</option>
                                                                    <option value="44">Fan Fiction</option>
                                                                    <option value="45">Finance</option>
                                                                    <option value="47">Naskah Drama</option>
                                                                 </select>       
                                                            </div>
                                                            <div class="clear"></div>
                                                         </div>
                                                 </div>
                                            </div> 
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label>size</label>
                                                        <div>
                                                            <div class="form-input">
                                                                <select name="papersize" id="papersize" class="form-control border-input" title="Choose the paper type"required>
                                                                    <option value="novel">Novel 13 x 19 cm</option>
                                                                    <option value="small-novel">Smaller Novel 11 x 17 cm</option>
                                                                    <option value="photobook">Photobook 20 x 20 cm</option>
                                                                </select>
                                                            </div>
                                                            <div class="clear"></div>
                                                         </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="text" class="form-control border-input" name="harga_buku" id="harga_buku"required>
                                                 <div class="clear"></div>
                                                            &nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Deskripsi Buku</label>
                                                <textarea class="form-control border-input" name="deskripsi_buku" required=""></textarea>
                                                 <div class="clear"></div>
                                                            &nbsp;
                                            </div>
                                        </div>
                                        <p style="color:red;">* Upload Naskah Buku</p>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Upload Bukumu</label>
                                                        <input type="file" name="naskah"  id="naskah" size="30" class="btn btn-info btn-fill btn-wd" required/>
                                                 <div class="clear"></div>
                                                            &nbsp;
                                             </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <div class="form-group">
                                                <label>Upload Cover Buku Mu</label>
                                                        <input type="file" name="cover"  id="cover" size="30" class="btn btn-info btn-fill btn-wd" required/>
                                                 <div class="clear"></div>
                                                            &nbsp;
                                             </div> -->
                                        </div>
                                        <!-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Upload Sinopsis</label>
                                                        <input type="file" name="sinopsis"  id="sinopsis" size="30" class="btn btn-info btn-fill btn-wd" required/>
                                                 <div class="clear"></div>
                                                            &nbsp;
                                             </div>
                                        </div> -->
                                <!-- UPLOAD SCRIPT -->

                                <!-- Terms & Conditions  -->
<!-- 
                                <div class="form-group">
                                    <label> Terms & Conditions</label>
                                    <div class="desc">
                                        <div><ol>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Keanggotaan di nulisbuku.com adalah terbuka bagi semua kalangan, baik penulis buku, pembeli buku maupun penikmat buku.</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Keanggotaan di nulisbuku.com adalah GRATIS dengan mengisi form keanggotaan secara lengkap</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Seorang anggota hanya boleh memiliki 1 (satu) user id</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Anggota berhak menggunakan fasilitas nulisbuku.com seperti meng-upload naskah, menjual buku, dan fasilitas lainnya.</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Anggota menjamin bahwa hasil karya yang di upload ke nulisbuku.com adalah hasil karyanya yang original, bukan saduran &amp; bukan terjemahan dari hasil karya orang lain.</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Anggota menjamin bahwa hasil karya yang di upload ke nulisbuku.com tidak mengandung unsur SARA, menyinggung agama atau golongan tertentu, serta tidak mengandung unsur pornografis.</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Seluruh tuntutan hukum atas hasil karya anggota menjadi tanggung jawab anggota.</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Pihak administrator nulisbuku.com tidak bertanggung jawab atas tuntutan hukum dari pihak lain atas hasil karya yang sudah di upload di nulisbuku.com</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Pihak administrator nulisbuku.com berhak untuk mengeluarkan hasil karya anggota jika ternyata anggota melanggar pasal 5 &amp; 6 dan jika terjadi tuntutan hukum terhadap hasil karya anggota</span></li>
                                            <li><span style="color: #000000; font-family: verdana, geneva; font-size: small;">Pihak administrator nulisbuku.com berhak untuk membekukan status keanggotaan jika anggota melanggar pasal 5 &amp; 6 dan jika terjadi tuntutan hukum terhadap hasil karya anggota</span></li>
                                            </ol></div>
                                    </div>
                                    <form>
                                        <input type="checkbox" value="Terms" name="terms" required>I Agree Terms & Conditions
                                    </form>
                                </div>
                                <div class="form-group">
                                        <label>Conditions to Join NulisBuku App</label>
                                        <div class="desc">
                                            <ol>
                                            <li><span style="font-family: verdana,geneva; font-size: small; color: #000000;">Bersedia jika sewaktu-waktu buku karya Anggota dimasukkan ke dalam NulisBuku app dalam berbagai format di berbagai platform tanpa dipungut bayaran.</span></li>
                                            <li><span style="font-family: verdana,geneva; font-size: small; color: #000000;">Setuju dengan pembagian royalti yang ditentukan NulisBuku.com yang disesuaikan untuk setiap platform.</span></li>
                                            <li><span style="font-family: verdana,geneva; font-size: small; color: #000000;">Anggota akan menerima royalti sesuai dengan periode yang ditentukan.</span></li>
                                            </ol>
                                            <p><span style="font-family: verdana,geneva; font-size: small; color: #000000;"><br /></span></p>
                                            <ol> </ol>
                                        </div>
                                        <form>
                                            <input type="checkbox" value="setuju" name="setuju" > Saya  Setuju Bergabung Dengan Aksaraku.com
                                           
                                                <!-- <div class="form-group">
                                                     <button type="submit" name="submit" class="btn btn-info btn-fill btn-wd">submit</button>
                                                </div> -->
                                            </div> 
    

<button class="btn btn-primary" name="save">Simpan</button>
</form>
                                        </form>
                                </div>

                                   
                                <!-- END Terms & Conditions  -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="Aksaraku.com">Aksaraku</a>
                </div>
            </div>
        </footer>


    </div>

@endsection