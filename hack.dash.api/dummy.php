<?php
    header("Content-type: text/xml");
    echo '
    <sigml>
    
    <hns_sign gloss="mug">
      <hamnosys_nonmanual>
        <hnm_mouthpicture picture="mVg"/>
      </hamnosys_nonmanual>
      <hamnosys_manual>
        <hamfist/> <hamthumbacrossmod/>
            <hamextfingerol/> <hampalml/>
        <hamshoulders/>
        <hamparbegin/> <hammoveu/> <hamarcu/>
            <hamreplace/> <hamextfingerul/> <hampalmdl/>
        <hamparend/>
      </hamnosys_manual>
    </hns_sign>
    
    <hns_sign gloss="take">
      <hamnosys_nonmanual>
        <hnm_mouthpicture picture="te_Ik"/>
      </hamnosys_nonmanual>
      <hamnosys_manual>
        <hamceeall/> <hamextfingerol/> <hampalml/>
        <hamlrbeside/> <hamshoulders/> <hamarmextended/>
        <hamreplace/> <hamextfingerl/> <hampalml/>
        <hamchest/> <hamclose/>
      </hamnosys_manual>
    </hns_sign>
    
    <hns_sign gloss="i">
      <hamnosys_nonmanual>
        <hnm_mouthpicture picture="a_I"/>
      </hamnosys_nonmanual>
      <hamnosys_manual>
        <hamfinger2/> <hamthumbacrossmod/>
        <hamextfingeril/> <hampalmr/>
        <hamchest/> <hamtouch/>
      </hamnosys_manual>
    </hns_sign>
    
    </sigml>
    
    ';
