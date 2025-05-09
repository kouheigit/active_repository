import React,{ useState,useRef } from 'react';
export default function Practice1(){
    const inputRef = useRef(null);
    const inputRef1 = useRef(null);

    const handleforcus = () =>{
        inputRef1.current.focus();
    }

    return (
        <div>
            <b>inputRef</b>
            <input ref={inputRef} type="text"/>
            <button onClick={() => inputRef.current.focus()}>フォーカスする</button>
            <b>inputRef1</b>
            <input ref={inputRef1} type="text"/>
            <button onClick={(handleforcus)}>フォーカスする</button>
        </div>
    )
}
