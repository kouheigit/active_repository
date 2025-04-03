import React, { useState } from 'react';
export default function Todo(){
    const[todos,setTodos] = useState([]);
    return (
        <div>
            <input  value={todos} onChange={(e => setTodos(e.target.value))}/>
            <p>あなたの名前は{input}です</p>
        </div>
    )
}
