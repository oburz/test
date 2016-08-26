<?

namespace ArrayHandler;

use ArrayHandler\Strategy\AbstractStrategy;

class ArrayHandler
{
    private $array;
    private $strategy;

    /**
     * ArrayHandler constructor.
     * @param array $arr
     * @param AbstractStrategy $strategy
     */
    public function __construct(array $arr, AbstractStrategy $strategy)
    {
        $this->array = $arr;
        $this->strategy = $strategy;
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->strategy->get($this->array);
    }
}
