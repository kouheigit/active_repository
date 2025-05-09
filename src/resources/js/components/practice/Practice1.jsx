import React,{ useState,useRef } from 'react';
export default function Practice1(){
    const inputRef = useRef(null);
    return (
        <div>
            <input ref={inputRef} />
            <button onClick={() => inputRef.current.focus()}>フォーカスする</button>
        </div>
    )
}
