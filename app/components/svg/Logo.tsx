import React from "react";
import Image from "next/image";

interface LogoProps {
  width?: number;
  height?: number;
}

const Logo: React.FC<LogoProps> = ({ width = 1920, height = 1080 }) => {
    return (
        <Image
            className={`w-${width} h-${height}`}
            src="/okay3.png"
            alt="Logo"
            width={220}
            height={220}
        />
    );
};

export default Logo;
