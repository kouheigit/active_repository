//import React, { useState } from 'react';はrequire_once 'React.php'; // ライブラリ本体の読み込み
//import React, { useState } from 'react';は→ use App\Helpers\StateManager; // 状態操作の機能を使えるようにする

import React, { useState } from 'react';
export default function Counter(){
    //list(count,setCount),SESSION['count'],SESSION['setCount']
    const [ count,setCount] = useState(0)
    return (
        <div>
            <h2>カウンターアプリ</h2>
            <p>現在のカウント{count}</p>
            <button onClick={() => setCount(count + 1)}>+1</button>
        </div>
    )
}

