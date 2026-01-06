<div class="div1">
  <div class="hotdevice">
    <ul id="ticker2">
      <?php if (!empty($hotDevices)): ?>
        <?php foreach ($hotDevices as $device): ?>
          <li>
            <a href="<?php echo site_url('devices/view/' . $device->id_device); ?>"
               style="padding-left:37px; font-size:27px;">
              (+ <?php echo $device->choice_device; ?>) <?php echo $device->name_device; ?>
            </a>
          </li>
        <?php endforeach; ?>
      <?php else: ?>
        <div style="font-size:18px; color:#000000; opacity:0.4; padding-top:14px;">
          현재 인기 디바이스가 없습니다.
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

  .hotdevice {
    height: 55px;
    font-weight: 700;
    padding-left: 24px;
  }

  .hotdevice li a {
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

  .hotdevice ul, .hotdevice li {
    margin: 0;
    padding: 0;
    list-style: none;
  }
</style>
