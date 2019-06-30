<style>
  .timeline {
    display: flex;
    flex-direction: column;
    position: relative;
    padding: 40px 0;
  }

  hr {
    border-color: #112233;
    position: absolute;
    top: 3%;
    left: 50%;
    border-width: 2px;
    height: 90%;
  }

  .mark {
    display: flex;
    align-items: center;
  }

  .mark.odd {
    margin-left: auto;
    margin-right: 30%;
  }

  .mark.odd .mark-title {
    margin-left: 20px;
  }

  .mark.even {
    flex-direction: row-reverse;
    margin-right: auto;
    margin-left: 30%;
  }

  .mark.even .mark-title {
    margin-right: 20px;
  }

  .mark-icon {
    padding: 40px 10px;
    border: 1px solid #000;
    border-radius: 50%;
    display: flex;
    justify-content: center;
  }

  .mark-icon img {
    width: 60%;
  }

  .mark-title {
    color: #112233;
    font-size: 2.3rem;
  }
</style>

<section class="timeline">
  <hr />

  <div class="mark odd">
    <div class="mark-icon">
      <img src="interface/statistics.svg" alt="">
    </div>
    <div class="mark-title">a</div>
  </div>

  <div class="mark even">
    <div class="mark-icon">
      <img src="interface/alarm-clock.svg" alt="">
    </div>
    <div class="mark-title">b</div>
  </div>
</section>