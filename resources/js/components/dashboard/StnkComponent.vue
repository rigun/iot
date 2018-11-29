<template>
<div class="html">
  <div class="body">
    <div class="facebook">
      <div class="paper">
        <div class="left">
          <div class="head">
             <router-link class="bgx ntf" to="#" style="color:white"></router-link>
          </div>
          <div class="friend">
            <img :src="'../../images/user.png'">
              <router-link to="#">Nama Pemilik</router-link>
            <p>Agung Prio Rismawan</p>
          </div>
          <div class="friend">
            <img :src="'../../images/ID.png'">
              <router-link class="a" to="#">Nomor KTP</router-link>
            <p>160709001</p>
          </div>
          <div class="friend">
            <img :src="'../../images/Nomor.png'">
              <router-link class="a" to="#">Nomor STNK</router-link>
            <p>160709001</p>
          </div>
          <div class="friend">
              <img :src="'../../images/Masa Berlaku.png'">
              <router-link class="a" to="#">Masa Berlaku</router-link>
            <p>20 Septermber 2019</p>
          </div>
        </div>

        <div class="right">
          <div class="details">
            <div class="pp"><img :src="'../../images/io.jpg'"></div>
        </div>
        <div class="friend">
          <center>
                <router-link to="#" style="align:center">Rio Gunawan</router-link>
                <p>Bukan programmer profesional tapi masih jauh dari kata newbie 😎😎😎😎</p>
              </center>
          </div>
          <div class="friend">
              <img :src="'../../images/telat.png'">
              <router-link class="a" to="#">Keterlambatan</router-link>
            <p>12 Hari</p>
          </div>
          <div class="friend">
              <img :src="'../../images/Total.png'">
              <router-link class="a" to="#">Total Bayar</router-link>
            <p>Rp. 260.000</p>
          </div>
          <div class="friend">
          </div>
          <router-link tag="button" to="#" class="btn btn-primary active btn-block btn-sm">Bayar Sekarang</router-link>
        </div>
      </div>
    </div>
  </div>
  </div>
</template>