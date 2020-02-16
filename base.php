<?php

namespace Trinhprz\Conceptual;

class SingleTon
{
    /**
     * The Singleton's instance is stored in a static field. This field is an
     * array, because we'll allow our Singleton to have subclasses. Each item in
     * this array will be an instance of a specific Singleton's subclass. You'll
     * see how this works in a moment.
     * Singleton đảm bảo rằng chỉ có một đối tượng thuộc loại này được tồn tại
     * và cung cấp điểm truy cập duy nhất này cho bất kì mã nào.
     * @var array
     */
    private static $instances = [];

    /**
     * SingleTon constructor should always be private to prevent direct.
     * Khai báo singleton
     */
    protected function __construct()
    {
        // TODO: construction calls with the `new` operator.
    }

    /**
     * Singletons should not be cloneable.
     * Không cho phép clone.
     */
    protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * Singletons should not be restorable from strings.
     * Đảm bảo Singletons không phải là một string.
     * @throws \Exception
     */
    protected function __wakeup()
    {
        throw new \Exception('Cannot unserialize a singleton.');
    }


    /**
     * Đây là phương thức kiểm soát quyền truy cập vào singleton
     * ví dụ. Trong lần chạy đầu tiên, nó tạo ra một đối tượng đơn lẻ
     * và đặt nó vào trường tĩnh.
     * Trong các lần chạy tiếp theo, nó trả về máy khách hiện có
     * đối tượng được lưu trữ trong trường tĩnh.
     * Việc triển khai này cho phép bạn phân lớp lớp Singleton trong khi
     * giữ chỉ là một ví dụ của mỗi lớp con xung quanh.
     * @return SingleTon
     */
    public static function getInstance(): SingleTon
    {
        $getStatic = static::class;
        $getInstances = static::$instances[$getStatic];
        if (!isset($checkObjSingleton)) {
            $getInstances = new static;
        }

        return $getInstances;
    }

    /**
     * Finally, any singleton should define some business logic, which can be
     * executed on its instance.
     */
    public function someBusinessLogic()
    {
        // TODO: Do Some Thing.
    }
}


