<?php

/**
 * 接口配置
 */
return [


	'login'							=>			'/web/v1/admin/dologin', 					    //登录
    //'logout'						=>			'/radius/V1/logout', 					        //退出


    /************房源操作*************/

    'ershoufang_add'                =>          '/web/v1/ppy/ershoufang_add',                   //添加二手房
    'xinfang_add'                   =>          '/web/v1/ppy/xinfang_add',                      //添加新房
    'get_ppy_list'                  =>          '/web/v1/ppy/get_ppy_list',
    'check_ppy_num'                 =>          '/web/v1/ppy/check_ppy_num',
    'ppy_soft_del'                  =>          '/web/v1/ppy/ppy_soft_del',
    /************新闻资讯*************/
    'get_news_list'                 =>          '/web/v1/news/get_news_list',                   //新闻列表
    'get_news_info'                 =>          '/web/v1/news/get_news_info',                   //新闻详情
    /**********客户反馈（官网）********/
    'get_fb_list'                   =>          '/web/v1/fb/get_fb_list',                       //管理员列表

    /**************招聘信息***********/
    'get_jobs_list'                 =>          '/web/v1/jobs/get_jobs_list',                   //岗位列表
    'get_jobs_info'                 =>          '/web/v1/jobs/get_jobs_info'                    //职位详情
];
