import { Link, useNavigate } from "react-router-dom";
import { useRef } from "react";

import { useGlobalContext } from "../context/globalContextProvider"
import axiosClient from "../../axiosClient";

import cart from './cartItems.module.scss'

export default function CartItems() {
  const { user, setItem, item } = useGlobalContext();

  const navigate = useNavigate();

  async function toBuyHandler(e, quantity, item_id, id) {
    e.preventDefault();
    console.log(item_id, quantity, id)
    const cart_id = id;
    try {
      const res = await axiosClient.get(`/show-item/${item_id}`);
      const itemData = {
        ...res.data,
        quantity,
        cart_id
      };
      setItem(itemData);

      console.log(itemData);
    } catch (error) {
      console.log(error)
    }
    navigate(`../../item/${item_id}/buy`);
  }

  return (
    <div className={cart.cartItems}>
      {user.cart_items ? (
        user.cart_items.map((item, index) => {
          const quantityRef = useRef(null);
          return (
            <div key={index}>
              <div>
                <div className={cart.up}>
                  <Link to={`../item/${item.item_id}`}
                  style={{ textDecoration: 'none'}}  
                  > 
                    <img src={`${import.meta.env.VITE_API_BASE_URL}${item.image_url}`} alt={item.item_name} />
                  </Link>
                  <h4>{item.item_name}</h4>
                </div>
                <div className={cart.down}>
                  <div className={cart.left}>
                    <input
                      type="number"
                      defaultValue={item.quantity}
                      min="1"
                      name="quantity"
                      ref={quantityRef}
                    />
                    <div>unit price: PHP {item.unit_price}</div>
                  </div>
                  <div className={cart.right}>
                    <div><p>Grand Total: PHP {item.grand_total}</p></div>
                    <button onClick={(e) => {
                      const quantity = Number(quantityRef.current.value);
                      toBuyHandler(e, quantity, item.item_id, item.id);
                    }}>buy</button>
                  </div>
                </div>
              </div>
            </div>
          )
        })
      ):(<div>no cart items</div>)}
    </div>
  )
}