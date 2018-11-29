<template>
  <div>
    <div class="facebook">
      <div class="paper">
        <div class="left">
          <div class="head">
            <a href="#" class="bgx ntf" style="color:white"></a>
          </div>
          <div class="friend">
            <img :src="'../../images/user.png'">
            <h1>
              <a href="#">Nama Pemilik</a>
            </h1>
            <p>Agung Prio Rismawan</p>
          </div>
          <div class="friend">
            <img :src="'../../images/ID.png'">
            <h1>
              <a href="#">Nomor KTP</a>
            </h1>
            <p>160709001</p>
          </div>
          <div class="friend">
            <img :src="'../../images/Nomor.png'">
            <h1>
              <a href="#">Nomor STNK</a>
            </h1>
            <p>160709001</p>
          </div>
          <div class="friend">
              <img :src="'../../images/Masa Berlaku.png'">
            <h1>
              <a href="#">Masa Berlaku</a>
            </h1>
            <p>20 Septermber 2019</p>
          </div>
          <div class="friend">
            <img :src="'../../images/Harga.png'">
            <h1>
              <a href="#">Jumlah Bayar</a>
            </h1>
            <p>Rp. 163.000</p>
          </div>
        </div>
        <div class="right">
          <div class="details">
            <div class="pp"></div>
            <h1>Agung Prio Rismawan</h1>
            <p>member Sejak 12 Januari 2018
              <a href="#">Jatah Stnk Habis</a>20 September 2019
            </p>
            <div style="clear:both"></div>
            <div class="graph maps"></div>
            <div style="clear:both"></div>

            <div class="post">
                <img :src="'../../images/telat.png'">
              <h1>
                <a href="#">Denda</a>
              </h1>
              <p>12 Hari</p>
              <div class="spacer">Rp. 120.000</div>
              <div class="comments">
                  <img :src="'../../images/Total.png'">
                <h1>
                  <a href="#">Jumlah Bayar + Denda</a>
                </h1>
                <p>Rp.283.000</p>
              </div>
            </div>
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>