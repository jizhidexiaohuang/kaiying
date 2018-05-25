<?php

namespace Home\Model;

use Think\Model;

class NewsModel extends Model
{
    /*
     * 分页样式替换bootstrap
     */
    public function bootstrap_page_style($page_html)
    {
        if ($page_html) {
            if(strstr($page_html,"<<")){
                $page_show = str_replace('<div>', '<nav><ul class="pagination">', $page_html);
            }else{
                $page_show = str_replace('<div>', '<nav><ul class="pagination"><li><a class="" href="javascript:void(0);"><<</a></li>', $page_html);
            }
            if(strstr($page_html,">>")){
                $page_show = str_replace('</div>', '</ul></nav>', $page_show);
            }else{
                $page_show = str_replace('</div>', '<li><a class="" href="javascript:void(0);">>></a></li></ul></nav>', $page_show);
            }
            if(!strstr($page_html,"<<") && !strstr($page_html,">>")){
                $page_show = str_replace('<div>', '<nav><ul class="pagination"><li><a class="" href="javascript:void(0);"><<</a></li><li><a class="" href="javascript:void(0);">1</a></li>', $page_html);
                $page_show = str_replace('</div>', '<li><a class="" href="javascript:void(0);">>></a></li></ul></nav>', $page_show);
            }
            $page_show = str_replace('<span class="current">', '<li class="active"><a>', $page_show);
            $page_show = str_replace('</span>', '</a></li>', $page_show);
            $page_show = str_replace(array('<a class="num"', '<a class="prev"', '<a class="next"', '<a class="end"', '<a class="first"'), '<li><a', $page_show);
            $page_show = str_replace('</a>', '</a></li>', $page_show);
        }
        return $page_show;
    }
}