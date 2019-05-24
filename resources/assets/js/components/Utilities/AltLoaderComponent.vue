<template>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="loader">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <p class="loader-text">{{ contents }}</p>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "SectionLoader",
    props: {
      size: {
        type: Number,
        default: 30
      },
      contents: {
        type: String,
        default: "Loading data"
      }
    }
  };
</script>

<style lang="scss" scoped>
  $speed: 2.5s;

  .container {
    min-height: 100px;
    text-align: center;

    .loader-text {
      position: relative;
      z-index: 5;
      font-size: 1.8em;
      top: 15px;
      color: #fff;
      text-shadow: 2px 2px black;
    }
  }
  .loader {
    position: absolute;
    top: 20px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    margin: auto;
    width: 175px;
    height: 100px;
    span {
      display: block;
      background: #357ca5;
      width: 7px;
      height: 10%;
      border-radius: 14px;
      margin-right: 5px;
      float: left;
      margin-top: 25%;
      &:last-child {
        margin-right: 0px;
      }
      // @for $i from 1 through 15 {
      //   .item-#{$i} { width: 2em * $i; }
      //   &:nth-child(#{$i}) {
      //     animation: load $speed 1.4s infinite linear;
      //   }
      // }
      &:nth-child(1) {
        animation: load $speed 1.4s infinite linear;
      }
      &:nth-child(2) {
        animation: load $speed 1.2s infinite linear;
      }
      &:nth-child(3) {
        animation: load $speed 1s infinite linear;
      }
      &:nth-child(4) {
        animation: load $speed 0.8s infinite linear;
      }
      &:nth-child(5) {
        animation: load $speed 0.6s infinite linear;
      }
      &:nth-child(6) {
        animation: load $speed 0.4s infinite linear;
      }
      &:nth-child(7) {
        animation: load $speed 0.2s infinite linear;
      }
      &:nth-child(8) {
        animation: load $speed 0s infinite linear;
      }
      &:nth-child(9) {
        animation: load $speed 0.2s infinite linear;
      }
      &:nth-child(10) {
        animation: load $speed 0.4s infinite linear;
      }
      &:nth-child(11) {
        animation: load $speed 0.6s infinite linear;
      }
      &:nth-child(12) {
        animation: load $speed 0.8s infinite linear;
      }
      &:nth-child(13) {
        animation: load $speed 1s infinite linear;
      }
      &:nth-child(14) {
        animation: load $speed 1.2s infinite linear;
      }
      &:nth-child(15) {
        animation: load $speed 1.4s infinite linear;
      }
    }
  }

  @keyframes load {
    0% {
      background: #357ca5;
      margin-top: 25%;
      height: 10%;
    }
    50% {
      background: #296181;
      height: 100%;
      margin-top: 0%;
    }
    100% {
      background: #357ca5;
      height: 10%;
      margin-top: 25%;
    }
  }
</style>
