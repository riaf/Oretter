<?php
require './__settings__.php';

R(Flow)->handler(array(
    '^$' => 'class=Status,method=models,name=status,template=statuses.html',
    '^/status/(\d+)$' => 'class=Status,method=model,name=status,template=statuses_detail.html',
    '^/update$' => 'class=Status,method=create,name=status',
))->output();
