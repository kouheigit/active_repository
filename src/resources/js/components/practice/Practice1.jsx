import React,{ useState,useRef,useMemo } from 'react';
export default function Practice1() {

    const [numbers] = useState([1, 2, 3, 4, 5, 6]);
    const [count, setCount] = useState(0);
    //新たに作成したカウントState
    const [countNumbers,setCountNumber] = useState(0);

    /*
    const[latestNumber,setLatestNumber] = useState(null);
    const[setNumbers,setEvenNumbers] = useState([]);*/

    const inputRef = useRef(null);
    const inputRef1 = useRef(null);

    const handleforcus = () => {
        inputRef1.current.focus();
    }

    const evenNumbers = useMemo(()=>{
        console.log('偶数だけ抽出してます....');
        return numbers.filter(n => n % 2 === 0);
    },[numbers]);

    /*
    const selectNumbers =()=>{

    }*/
    
/*
    const selectNumbers =()=>{
        const number = setNumbers.length + 1;
        const update = [...setNumbers,number];
        const filtered = update.filter(n => n % 2 ===0);
        //現在の値
        setLatestNumber(number);
        //フィルターされた値
        setEvenNumbers(filtered);
    }*/

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

            <p>加算メソット</p>
            countNumbers,setCountNumber
            <button onClick={()=>setCountNumber(countNumbers + 1)}>カウント{countNumbers}</button>
            {/*
            setNumbers,setCountNumber

            <button onClick={selectNumbers}>追加する</button>
            <p>数値{latestNumber}</p>
            <p>偶数{setNumbers.join(', ')}</p>*/}
       </div>
    )
}

