import React,{ useState,useRef,useMemo } from 'react';
export default function Practice1(){

    const [numbers] = useState([1,2,3,4,5,6]);
    const[count,setCount] = useState(0);

    const inputRef = useRef(null);
    const inputRef1 = useRef(null);

    const handleforcus = () =>{
        inputRef1.current.focus();
    }

    const evenNumbers = useMemo(()=>{
        console.log('偶数だけ抽出してます....');
        return numbers.filter(n => n % 2 === 0);
    },[numbers]);
    /*
    const evenNumbers = useMemo(() => {
        console.log('偶数だけ抽出しています...');
        return numbers.filter(n => n % 2 === 0);
    }, [numbers]);*/



    return (
        <div>
            <b>inputRef</b>
            <input ref={inputRef} type="text"/>
            <button onClick={() => inputRef.current.focus()}>フォーカスする</button>
            <b>inputRef1</b>
            <input ref={inputRef1} type="text"/>
            <button onClick={(handleforcus)}>フォーカスする</button>

            <p>偶数: {evenNumbers.join(', ')}</p>
            <button onClick={() => setCount(count + 1)}>カウントアップ：{count}</button>
        </div>
    )
}

