import React, { useState } from 'react';
export default function Todo(){
    const[todos,setTodos] = useState([]);
    return (
        <div>
            <input type="text" value={input} onChange={(e => setInput(e.target.value))}/>
        </div>
    )
}
