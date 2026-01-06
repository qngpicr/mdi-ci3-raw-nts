<div class="div1">
  <div class="hotcpu">
    <ul id="ticker1">
      <?php if (!empty($hotCpus)): ?>
        <?php foreach ($hotCpus as $cpu): ?>
          <li>
            <a href="<?php echo site_url('cpus/view/' . $cpu->id_cpu); ?>"
               style="padding-left:37px; font-size:27px;">
              (+ <?php echo $cpu->choice_cpu; ?>) <?php echo $cpu->name_cpu; ?>
            </a>
          </li>
        <?php endforeach; ?>
      <?php else: ?>
        <div style="font-size:18px; color:#000000; opacity:0.4; padding-top:14px;">
          현재 인기 프로세서가 없습니다.
        </div>
      <?php endif; ?>
    </ul>
  </div>
</div>

<style>
  .div1 {
    display: flex;
    outline-width: 1px;
    width: 100%;
    height: auto;
    color: black;
    overflow: hidden;
    padding-left: 80px;
    margin-left: 50px;
  }

  .hotcpu {
    height: 55px;
    font-weight: 700;
    padding-left: 24px;
  }

  .hotcpu li a {
    width: 520px;
    height: 55px;
    line-height: 55px;
    color: #d50175;
    text-shadow: 0 0 8px white;
    text-decoration: none;
    display: block;
    padding-left: 5px;
    justify-content: center;
    font-size: 32px;
    font-weight: 700;
  }

  .hotcpu ul, .hotcpu li {
    margin: 0;
    padding: 0;
    list-style: none;
  }
</style>
