import React, { useState } from 'react';
export default function Todo(){
    const [count,setCount] = useState(0);
    return (
        <div>
            <input type="text" name="name"      >
            </input>
        </div>
    )
}
