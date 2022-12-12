import React from "react";

export default function test() {
  const [click, setClick] = useState(0);

  useEffect(() => {
    document.title = `you clicked ${count} times`;
  }, []);

  return (
    <div>
      test
      <button onclick={() => setClick(click + 1)}>click the button</button>
    </div>
  );
}
