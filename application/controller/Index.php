<?php

namespace app\controller;

use think\Controller;

class Index extends Controller {
    
    /**
     * 404页面
     * @return type
     */
    public function notFound() {
        return $this->fetch('err');
    }

    /**
     * 首页
     * @return type
     */
    public function index() {
        
        return $this->fetch('index',['nav_index' => 1]);
    }
    
    /**
     * 关于我们
     * @return type
     */
    public function aboutUs() {
        return $this->fetch('about_us',['nav_index' => 2]);
    }
    
    /**
     * 作品展示
     * @return type
     */
    public function solution() {
        return $this->fetch('solution',['nav_index' => 3]);
    }
    
    /**
     * 作品展示详情
     * @return type
     */
    public function solutionDetail() {
        return $this->fetch('solution_detail',['nav_index' => 3]);
    }
    
    /**
     * 课程介绍
     * @return type
     */
    public function course() {
        return $this->fetch('course',['nav_index' => 4]);
    }
    
    /**
     * 精英师资
     * @return type
     */
    public function teacher() {
        return $this->fetch('teacher',['nav_index' => 5]);
    }
    
    /**
     * 教师风采详情
     * @return type
     */
    public function teacherDetail() {
        return $this->fetch('teacher_detail',['nav_index' => 5]);
    }
    
    /**
     * 联系我们
     * @return type
     */
    public function contact() {
        return $this->fetch('contact',['nav_index' => 6]);
    }

}
