<div class="deviceSearch">
    <form action="<?php echo site_url('search/device'); ?>" method="get" class="devicelist_searchbox_form">
        <select class="category" name="catgo">
            <option value="name_device">name_total</option>
        </select>
        <input class="devicelist_searchbox_text" type="text" name="search" required placeholder="디바이스 검색하기">
        <!-- 필요하다면 버튼 추가 -->
        <!-- <button type="submit">검색</button> -->
    </form>
</div>
