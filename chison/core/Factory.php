<?php
/**
 * Created by PhpStorm.
 * User: Chison
 * Date: 2016-10-19
 * Time: 20:32
 * 工厂模式
 * 不用在外面new 对象，当类发生修改时，只需要在工厂方法中修改就可以了。
 * 扩展：面对经常调用的代码，未来可能需要修改。这样类似的就可以放在工厂方法中。效果：一改全改。
 */

namespace chison\core;
class Factory{

    /**
     * @return \chison\test\Test1
     */
    static function createDatabase(){
        $db = new \chison\test\Test1();
        //将该对象注册到注册树上，一般在框架载入时调用。
        \chison\core\Register::set('test1',$db);
        return $db;
    }
}