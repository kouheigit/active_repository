import React, { useState } from 'react';
export default function Todo(){
    const [todos,setTodos] = useState([]);
    return (
        <div>
            <h1>アンパン</h1>
            <input  value={todos} onChange={(e => setTodos(e.target.value))}/>
            <p>あなたの名前は{input}です</p>
        </div>
    )
}
