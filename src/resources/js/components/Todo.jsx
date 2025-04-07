import React, { useState } from 'react';
export default function Todo(){
    const [todos,setTodos] = useState([]);
    const [inputs,setInput] = useState('');
    const addTodo = ()=>{
        if(inputs.trim()==='') return;
        setTodos([...todos,inputs]);
        setInput('');
    };
    return (
        <div>
            <input type="text" value={inputs} onChange={(e) => setInput(e.target.value)}/>
            <p>入力された値: {inputs}</p>
            <button onClick={addTodo}>追加</button>
        </div>
    )
}

/*
function Todo(){
    const [todos,setTodos] = useState('');
    return (
        <div className="todo">
            <input
                type="text"
                value={todos}
                onChange={(e) => setTodos(e.target.value)}
            />
            <p>入力された値: {todos}</p>
        </div>
    );
}

export default Todo;

if (document.getElementById('todo')) {
    ReactDOM.render(<Todo />, document.getElementById('todo'));
}

 */
