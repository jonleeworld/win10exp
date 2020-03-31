<?php
/**
 * Template Name: kms
 */
get_header();
the_post();
?>
<div class="layui-row content">
    <div class="layui-col-md2 sidebar <?php get_self_adaption_css() ?>">
      <?php get_sidebar(); ?></div>
    <div class="layui-col-md10 post-content">
      <div class="post-content-content">
        <?php the_content(); ?>
          <style>.container:before,.row:before,.nav:after{display:table;content:" ";}.row{margin-right:-15px;margin-left:-15px}.well{min-height:20px;padding:19px;margin-bottom:20px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}.nav:after{clear:both;}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.btn-block{display:block;width:100%}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success.focus,.btn-success:focus{color:#fff;background-color:#449d44;border-color:#255625}.btn-success:hover{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.container{display:table;height:100%;width:100%;}.row{display:table-cell;vertical-align:middle;}.row-centered{text-align:center;}.col-centered{display:inline-block;float:none;text-align:left;margin-right:-4px;}</style>
          <div class="container">
            <div class="row row-centered">
              <div class="well col-md-6 col-centered" class="width:100%!important;">
                <div style="background: #f0f8e5;line-height:1;padding: 10px 10px 5px 10px;border-left: 3px solid #86cc00;margin-bottom: 10px;width:100%;">
                  <p style="text-align: center;font-size: 20px;margin-bottom: 10px;border-bottom: 1px solid #d0cccc;padding-bottom: 6px;">KMS一键激活系统</p>
                  <p>1、激活步骤：根据自身系统下载激活脚本，再右键使用管理员运行该脚本即可。</p>
                  <p>2、KMS激活适用于专业版（Professional）、企业版（Enterprise）、教育版（Education）和服务器端（Server），如果是旗舰版用户请使用OEM激活或重装系统。</p>
                  <p>3、不知道系统版本的，使用Win+R，输入cmd并运行，然后在命令窗口输入slmgr/dlv查看版本。</p>
                  <p>4、如果激活失败可先
                    <a href="<?php echo get_stylesheet_directory_uri() . '/extend/clean.php' ?>">下载清除脚本</a>并运行后再次尝试激活。</p>
                  <p>5、本站仅供学习交流，不对激活产生的任何问题负责，最终解释权由本站保留。</a>
                  </p>
                </div>
                <form action="<?php echo get_stylesheet_directory_uri() . '/extend/kms.php' ?>" method="post" role="form">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation">
                      <a href="#Windows10" aria-controls="Windows10" role="tab" data-toggle="tab">Windows 10</a></li>
                    <li role="presentation">
                      <a href="#Windows81" aria-controls="Windows81" role="tab" data-toggle="tab">Windows 8.1</a></li>
                    <li role="presentation">
                      <a href="#Windows8" aria-controls="Windows8" role="tab" data-toggle="tab">Windows 8</a></li>
                    <li role="presentation">
                      <a href="#WindowsVista" aria-controls="WindowsVista" role="tab" data-toggle="tab">Windows Vista</a></li>
                    <li role="presentation">
                      <a href="#Windows7" aria-controls="Windows7" role="tab" data-toggle="tab">Windows 7</a></li>
                    <li role="presentation">
                      <a href="#WindowsServer2016" aria-controls="WindowsServer2016" role="tab" data-toggle="tab">Windows Server 2016</a></li>
                    <li role="presentation">
                      <a href="#WindowsServer2012" aria-controls="WindowsServer2012" role="tab" data-toggle="tab">Windows Server 2012</a></li>
                    <li role="presentation">
                      <a href="#WindowsServer2008" aria-controls="WindowsServer2008" role="tab" data-toggle="tab">Windows Server 2008</a></li>
                  </ul>
                  <div class="tab-content" id="sys-tab">
                    <div role="tabpanel" class="tab-pane tip active">
                      <h4 style="text-align:center">请从上方选择需要激活的系统</h4></div>
                    <div role="tabpanel" class="tab-pane" id="Windows10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="W269N-WFGWX-YVC9B-4J6C9-T83GX">Windows 10 Professional</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="MH37W-N47XK-V7XM9-C7227-GCQG9">Windows 10 Professional N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="NPPR9-FWDCX-D2C8J-H872K-2YT43">Windows 10 Enterprise</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="DPH2V-TTNVB-4X9Q3-TJR4H-KHJW4">Windows 10 Enterprise N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="NW6C2-QMPVW-D7KKK-3GKT6-VCFB2">Windows 10 Education</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="2WH4N-8QGBV-H22JP-CT43Q-MDWWJ">Windows 10 Education N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="WNMTR-4C88C-JK8YV-HQ7T2-76DF9">Windows 10 Enterprise 2015 LTSB</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="2F77B-TNFGY-69QQF-B8YKP-D69TJ">Windows 10 Enterprise 2015 LTSB N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="DCPHK-NFMTC-H88MJ-PFHPY-QJ4BJ">Windows 10 Enterprise 2016 LTSB</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="QFFDN-GRT3P-VKWWX-X7T3R-8B639">Windows 10 Enterprise 2016 LTSB N</label></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Windows81">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="GCRJD-8NW9H-F2CDX-CCM8D-9D6T9">Windows 8.1 Professional</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="HMCNV-VVBFX-7HMBH-CTY9B-B4FXY">Windows 8.1 Professional N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="MHF9N-XY6XB-WVXMC-BTDCT-MKKG7">Windows 8.1 Enterprise</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="TT4HM-HN7YT-62K67-RGRQJ-JFFXW">Windows 8.1 Enterprise N</label></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Windows8">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="NG4HW-VH26C-733KW-K6F98-J8CK4">Windows 8 Professional</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="XCVCF-2NXM9-723PB-MHCB7-2RYQQ">Windows 8 Professional N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="32JNW-9KQ84-P47T8-D8GGY-CWCK7">Windows 8 Enterprise</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="JMNMF-RHW7P-DMY6X-RF3DR-X2BQT">Windows 8 Enterprise N</label></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="WindowsVista">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="YFKBB-PQJJV-G996G-VWGXY-2V3X8">Windows Vista Business</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="HMBQG-8H2RH-C77VX-27R82-VMQBT">Windows Vista Business N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="VKK3X-68KWM-X2YGT-QR4M6-4BWMV">Windows Vista Enterprise</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="VTC42-BM838-43QHV-84HX6-XJXKV">Windows Vista Enterprise N</label></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Windows7">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="FJ82H-XT6CR-J8D7P-XQJJ2-GPDD4">Windows 7 Professional</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="MRPKT-YTG23-K7D7T-X2JMM-QY7MG">Windows 7 Professional N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="W82YF-2Q76Y-63HXB-FGJG9-GF7QX">Windows 7 Professional E</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="33PXH-7Y6KF-2VJC9-XBBR8-HVTHH">Windows 7 Enterprise</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="YDRBP-3D83W-TY26F-D46B2-XCKRJ">Windows 7 Enterprise N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="C29WB-22CC8-VJ326-GHFJW-H9DH4">Windows 7 Enterprise E</label></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="WindowsServer2016">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="CB7KF-BWN84-R7R2Y-793K2-8XDDG">Windows Server 2016 Datacenter</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="WC2BQ-8NRM3-FDDYY-2BFGV-KHKQY">Windows Server 2016 Standard</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="JCKRF-N37P4-C2D82-9YXRT-4M63B">Windows Server 2016 Essentials</label></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="WindowsServer2012">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="D2N9P-3P6X9-2R39C-7RTCD-MDVJX">Windows Server 2012 R2 Server Standard</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="W3GGN-FT8W3-Y4M27-J84CP-Q3VJ9">Windows Server 2012 R2 Datacenter</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="KNC87-3J2TX-XB4WP-VCPJV-M4FWM">Windows Server 2012 R2 Essentials</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="BN3D2-R7TKB-3YPBD-8DRP2-27GG4">Windows Server 2012</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="8N2M2-HWPGY-7PGT9-HGDD8-GVGGY">Windows Server 2012 N</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="2WN2H-YGCQR-KFX6K-CD6TF-84YXQ">Windows Server 2012 Single Language</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="4K36P-JN4VD-GDC6V-KDT89-DYFKP">Windows Server 2012 Country Specific</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="XC9B7-NBPP2-83J2H-RHMBY-92BT4">Windows Server 2012 Server Standard</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="HM7DN-YVMH3-46JC3-XYTG7-CYQJJ">Windows Server 2012 MultiPoint Standard</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="XNH6W-2V9GX-RGJ4K-Y8X6F-QGJ2G">Windows Server 2012 MultiPoint Premium</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="48HP8-DN98B-MYWDG-T2DCC-8W83P">Windows Server 2012 Datacenter</label></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="WindowsServer2008">
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="6TPJF-RBVHG-WBW2R-86QPH-6RTM4">Windows Server 2008 R2 Web</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="TT8MH-CG224-D3D7Q-498W2-9QCTX">Windows Server 2008 R2 HPC edition</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="YC6KT-GKW9T-YTKYR-T4X34-R7VHC">Windows Server 2008 R2 Standard</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="489J6-VHDMP-X63PK-3K798-CPX3Y">Windows Server 2008 R2 Enterprise</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="74YFP-3QFB3-KQT8W-PMXWJ-7M648">Windows Server 2008 R2 Datacenter</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="GT63C-RJFQ3-4GMB6-BRFB9-CB83V">Windows Server 2008 R2 for Itanium-based Systems</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="WYR28-R7TFJ-3X2YQ-YCY4H-M249D">Windows Web Server 2008</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="TM24T-X9RMF-VWXK6-X8JC9-BFGM2">Windows Server 2008 Standard</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="W7VD6-7JFBR-RX26B-YKQ3Y-6FFFJ">Windows Server 2008 Standard without Hyper-V</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="YQGMW-MPWTJ-34KDK-48M3W-X4Q6V">Windows Server 2008 Enterprise</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="39BXF-X8Q23-P2WWT-38T2F-G3FPG">Windows Server 2008 Enterprise without Hyper-V</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="RCTX3-KWVHP-BR6TB-RB6DM-6X7HP">Windows Server 2008 HPC</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="7M67G-PC374-GR742-YH8V4-TCBY3">Windows Server 2008 Datacenter</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="22XQ2-VRXRG-P8D42-K34TD-G3QQC">Windows Server 2008 Datacenter without Hyper-V</label></div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="kms" value="4DWFP-JF3DJ-B7DTH-78FJB-PDRHK">Windows Server 2008 for Itanium-Based Systems</label></div>
                    </div>
                  </div>
                  <br />
                  <button type="submit" class="btn btn-success btn-block">下载脚本</button></form>
              </div>
            </div>
          </div>
          <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
          <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      </div>
      <div class="post-content-comments">
        <?php comments_template(); ?></div>
    </div>
  </div>
</div>
</body>
<?php get_footer() ?>
<?php wp_footer(); ?>
</html>