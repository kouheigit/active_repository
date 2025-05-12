import React,{ useState,useRef,useMemo } from 'react';
export default function Practice1() {

    const [numbers] = useState([1, 2, 3, 4, 5, 6]);
    const [count, setCount] = useState(0);
    const [select,selectCount] = useState([]);
    //	inputCount	setInputCount


    const inputRef = useRef(null);
    const inputRef1 = useRef(null);

    const handleforcus = () => {
        inputRef1.current.focus();
    }
    const selectNumbers = () =>{
        const number = select.length + 1;
        const selectarray = [...select,number];
        const selectans = selectarray.filter(n => n % 2 === 0);
        selectCount(selectans);
    }

    const evenNumbers = useMemo(()=>{
        console.log('偶数だけ抽出してます....');
        return numbers.filter(n => n % 2 === 0);
    },[numbers]);



    return (
        <div>
            <b>inputRef処理</b>
            <input ref={inputRef} type="text"/>
            <button onClick={() => inputRef.current.focus()}>フォーカスする</button>
            <b>inputRef1処理</b>
            <input ref={inputRef1} type="text"/>
            <button onClick={(handleforcus)}>フォーカスする</button>
            <p>useMemoの処理</p>
            <p>偶数: {evenNumbers.join(', ')}</p>
            <button onClick={() => setCount(count + 1)}>カウントアップ：{count}</button>

            <p>入力された数字（偶数のみ保存）</p>
            <p>{select.join(', ')}</p>
            <button onClick={selectNumbers}>追加する</button>
            <p>出力される文字</p>
            {selectCount((value,i)=>(
                <p>{value}</p>
            ))}
      「 </div>
    )
}

