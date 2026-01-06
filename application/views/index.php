<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo base_url('assets/css/main_header.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/user.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/index/index_body_index.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/index/index-slick-cpu.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/index/index-slick-device.css'); ?>">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<title>CI3 SSR Index</title>
</head>
<body>

  <?php $this->load->view('fragments/main-header'); ?>

  <div class="ground">
    <div class="index_content_line">
      <div class="index_content" style="margin-top: -30px;">

        <!-- CPU 영역 -->
        <div class="part1">
          <div class="Main_Title">
            <div class="tool1_title"><a>프로세서 중심으로 살펴보세요.</a></div>
            <div class="tool1_semi"><a>프로세서 목록을 통해, 프로세서의 상세 정보를 확인하세요.</a></div>
          </div>

          <div class="index_button_line1">
            <div class="button_content1">
              <div class="Module_Layout_1">
                <div class="Module_Layout_1_1" style="width: 1314px;">
                  <div class="Module_Layout_1_1_1" style="width: 1309px;">
                    <div class="Module_Layout_1_1_1_title">
                      <div class="Module_Layout_1_1_1_title_0"><a style="font-size: 18px;">P</a></div>
                      <div class="Module_Layout_1_1_1_title_1">
                        <a href="<?php echo site_url('cpus-jquery'); ?>">프로세서 탐색</a>
                      </div>
                      <div class="Module_Layout_1_1_1_title_2">
                        <a href="<?php echo site_url('base'); ?>">자세히</a>
                      </div>
                    </div>
                  </div>

                  <div class="Module_Layout_1_1_2" style="width: 1309px; padding-left: 40px;">
                    <div class="Module1_start" style="width: 600px;">
                      <div class="Total_Count" onclick="location.href='<?php echo site_url('mdi/page1/page1_list'); ?>'">
                        <div class="Total_Count_Amount">
                          <a href="<?php echo site_url('cpus-fetch'); ?>">
                            <?php echo $totalCpuCount; ?>
                          </a>
                        </div>
                        <div class="Total_Count_Processor"><a>프로세서</a></div>
                      </div>

                      <div class="Hot_Items1">
                        <div class="Hot_Items2_1"><div class="Hot_Items2_1_1"><a>실시간 인기 프로세서</a></div></div>
                        <div class="Hot_Items2_2"><div class="Hot_Items2_2_1">
                          <?php $this->load->view('fragments/hot-cpus', ['hotCpus' => $hotCpus]); ?>
                        </div></div>
                      </div>
                    </div>

                    <div class="Module1_start_slider">
                      <?php $this->load->view('fragments/cpu-slider'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Device 영역 -->
        <div class="part2">
          <div class="Main_Title" style="margin-top: -30px;">
            <div class="tool1_title"><a>디바이스를 탐색할 수 있습니다.</a></div>
            <div class="tool1_semi"><a>디바이스 목록을 통해, 디바이스의 상세 정보를 확인하세요.</a></div>
          </div>

          <div class="index_button_line1">
            <div class="button_content1">
              <div class="Module_Layout_1">
                <div class="Module_Layout_1_1" style="width: 1314px;">
                  <div class="Module_Layout_1_1_1" style="width: 1309px;">
                    <div class="Module_Layout_1_1_1_title">
                      <div class="Module_Layout_1_1_1_title_0"><a style="font-size: 18px;">D</a></div>
                      <div class="Module_Layout_1_1_1_title_1">
                        <a href="<?php echo site_url('devices'); ?>">디바이스 탐색</a>
                      </div>
                      <div class="Module_Layout_1_1_1_title_2">
                        <a href="<?php echo site_url('base#Module_Layout_1_device'); ?>">자세히</a>
                      </div>
                    </div>
                  </div>

                  <div class="Module_Layout_1_1_2" style="width: 1309px; padding-left: 40px;">
                    <div class="Module1_start" style="width: 600px;">
                      <div class="Total_Count" onclick="location.href='<?php echo site_url('mdi/page2/page2_list'); ?>'">
                        <div class="Total_Count_Amount">
                          <a href="<?php echo site_url('devices'); ?>">
                            <?php echo $totalDeviceCount; ?>
                          </a>
                        </div>
                        <div class="Total_Count_Device"><a>디바이스</a></div>
                      </div>

                      <div class="Hot_Items2">
                        <div class="Hot_Items2_1"><div class="Hot_Items2_1_1"><a>실시간 인기 디바이스</a></div></div>
                        <div class="Hot_Items2_2"><div class="Hot_Items2_2_1">
                          <?php $this->load->view('fragments/hot-devices', ['hotDevices' => $hotDevices]); ?>
                        </div></div>
                      </div>
                    </div>

                    <div class="Module1_start_slider">
                      <?php $this->load->view('fragments/device-slider'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

<script src="<?php echo base_url('assets/js/jquery-3.5.0.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-migrate-3.5.0.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo base_url('assets/js/slider-init.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/hotcpus.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/hotdevices.js'); ?>"></script>

</body>
</html>
