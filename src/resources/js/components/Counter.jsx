import React, { useState } from 'react';
export default function Counter(){
    const [ count,setCount] = useState(0)
    return (
        <div>
            <h1>テスト</h1>
            <h2>カウンターアプリ</h2>
            <p>現在のカウント{count}</p>
            <button onClick={() => setCount(count + 1)}>+1</button>
        </div>
    )
}

