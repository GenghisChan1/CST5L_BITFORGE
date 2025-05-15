import { ChevronUp, ChevronDown } from 'lucide-react';
import { useState } from 'react';

import { useGlobalContext } from '../context/globalContextProvider';

import comment from './displayComments.module.scss';

export default function DisplayComments() {

  const { user, item } = useGlobalContext();

  console.log(item.comments);

  return (
    <div className={comment.commentwrap}>
      {item.comments?.map((cmnt, index)=>(
        <div key={index}>
          <div className={comment.username}>
            <h4>{cmnt.username}</h4>
            {cmnt.role?.toLowerCase() === "admin" && (
              <div className={comment.userrole}>
                <p>{cmnt.role?.charAt(0).toUpperCase() + cmnt.role?.slice(1).toLowerCase()}</p>
              </div>
            )}
          </div>
          <div className={comment.comment}>
              <div>
                <p>{cmnt.comment}</p>
              </div>
          </div>
        </div>
      ))}
    </div>
  )
}