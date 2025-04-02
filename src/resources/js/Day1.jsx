import React,{ useState } from 'react';
export default function Day1(){
    const [count,setCount] = usestate(0);
    return (
        <div>

        </div>
    )
}




/*
import React, { useState } from 'react';
export default function Counter(){
    // list(count, setCount) に相当。セッションで言えば count = $_SESSION['count'];
    const [ count,setCount] = useState(0)
    return (
        <div>
            <h2>カウンターアプリ</h2>
            <p>現在のカウント{count}</p>
            <button onClick={() => setCount(count + 1)}>+1</button>
        </div>
    )
}
 */
